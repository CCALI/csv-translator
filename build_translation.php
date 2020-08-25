<?php
    $start = "<?php\n\n\treturn [\n";
    $end = "\n\t];\n\n?>";

    // helper functions
    function formatProp($row) {
        return "\t\t'" . $row[1] . "'" . " => " . "'" . $row[2] . "',";
    }

    function processCSV($rows, $workingText) {
        // tracking for nested props
        $lastParentKey = '';

        foreach($rows as $row) {
            // nested prop
            if ($row[0] !== "") {
                $parentKey = $row[0];
                if($lastParentKey !== $parentKey) {
                    // track current parentKey
                    $lastParentKey = $parentKey;
                    // parent key line opens sub array
                    $workingText = $workingText . "\n\t\t\t'" . $parentKey . "' => " . "[";
                } else {
                    // adding to same sub array
                    $workingText = $workingText . "\n\t\t  " . formatProp($row);
                }
            } else {
                if ($lastParentKey !== '') {
                    // need to finish nested array string
                    $workingText = $workingText . "\n\t\t\t],";
                    // set lastParentKey = '' to clear sub array processing
                    $lastParentKey = '';
                }
                $workingText = $workingText . "\n  " . formatProp($row);
            }
        }

        return $workingText;
    }

    function replace_extension($filename, $new_extension) {
        $info = pathinfo($filename);
        return ($info['dirname'] ? $info['dirname'] . DIRECTORY_SEPARATOR : '')
            . $info['filename']
            . '.'
            . $new_extension;
    }


    // process each csv file and write to it's own .php language file
    if (isset($argc)) {
        for ($i = 1; $i < $argc; $i++) {
            echo "Argument #" . $i . " - " . $argv[$i] . "\n";
            $csvSource = $argv[$i];
            $translationFile = replace_extension($csvSource, 'php');
            // get rows from csv
            $rows = array_map('str_getcsv', file($csvSource));
            // strip out header
            $header = array_shift($rows);

            // process csv, with recursion for sub arrays
            $processedCsv = processCSV($rows, $start);

            // stich final string together
            $processedCsv = $processedCsv . "\n" . $end;

            // write final to new file
            $newFile = fopen($translationFile, 'w') or die("Unable to open file!");
            fwrite($newFile, $processedCsv);
            fclose($newFile);
        }
    }
    else {
        echo "argc and argv disabled\n";
    }
?>
