<?php

function readJSON($filepath) {
    if(file_exists($filepath)) {
        $jsonString = file_get_contents($filepath);
        if ($jsonString !== false) {
            $data = json_decode($jsonString, true);
            if ($data !== null) {
                return $data;
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function writeJSON($filepath, $data) {
    if (file_exists($filepath)) {
        $jsonContent = file_get_contents($filepath);
        $existingData = json_decode($jsonContent, true);
    } else {
        $existingData = [];
    }

    $existingData[] = $data;

    $jsonString = json_encode($existingData, JSON_PRETTY_PRINT);

    if ($jsonString !== false) {
        if (file_put_contents($filepath, $jsonString) !== false) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function updateJSON($array, $filepath, $uniqueIdentifier, $newData) {
    if (isset($array[$uniqueIdentifier])) {
        $array[$uniqueIdentifier] = $newData;
        $updatedJsonContents = json_encode($array, JSON_PRETTY_PRINT);

        if ($updatedJsonContents === false) {
            return false;
        }

        if (file_put_contents($filepath, $updatedJsonContents) === false) {
            return false;
        }

        return true;
    } else {
        return false;
    }
}

function deleteJSON($array, $filepath, $data) {
    if (isset($array[$data])) {
        unset($array[$data]);
        $updatedJsonContents = json_encode($array, JSON_PRETTY_PRINT);

        if ($updatedJsonContents === false) {
            return false;
        }

        if (file_put_contents($filepath, $updatedJsonContents) === false) {
            return false;
        }

        return true;
    } else {
        return false;
    }
}

?>