<?php
    $start = "<?php\n\n\treturn [\n";
    $end = "\n\t];\n\n?>";

    // helper functions
    function formatProp($row) {
        // escape inner single quotes like, ex: `can't` -> `can\'t`
        $escapedValue = str_replace("'", "\'", $row[2]);
        // TODO: possibly use addslashes as it escapes (', ", \, NUL)
        // $escapedValue = addslashes($row[2]);
        return "\t\t'" . $row[1] . "'" . " => " . "'" . $escapedValue . "',";
    }

    function processCSV($rows, $workingText) {
        // tracking for nested props
        $lastParentKey = '';
        $numberOfRows = sizeof($rows);
        // start loopCount at 0 because the header row is removed
        $loopCount = 0;

        foreach($rows as $row) {
            $loopCount++;
            // nested prop
            if ($row[0] !== "") {
                $parentKey = $row[0];
                if($lastParentKey !== $parentKey) {
                    // track current parentKey
                    $lastParentKey = $parentKey;
                    // parent key line opens sub array
                    $workingText = $workingText . "\n\t\t\t'" . $parentKey . "' => " . "[";
                }
                // adding to same sub array
                $workingText = $workingText . "\n\t\t  " . formatProp($row);
            } else {
                if ($lastParentKey !== '') {
                    // need to finish nested array string
                    $workingText = $workingText . "\n\t\t\t],";
                    // set lastParentKey = '' to clear sub array processing
                    $lastParentKey = '';
                }
                $workingText = $workingText . "\n  " . formatProp($row);
            }
            // edge case of final iteration being a nested array
            if ($row[0] !== "" && $loopCount === $numberOfRows) {
                // need to finish nested array string
                $workingText = $workingText . "\n\t\t\t],";
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
            $csvSource = '2020-08-24-messages.csv';
            $translationFile = './processed-files/' . replace_extension($csvSource, 'php');
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
    } else {
        echo "argc and argv disabled\n";
    }
?>
