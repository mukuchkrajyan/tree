<?php

namespace Classes;

final class ParseDOTENV
{
    private function getRoot()
    {
        return $_SERVER['DOCUMENT_ROOT'];
    }

    /*
     * Parse .env file
     */
    public function parse()
    {
        $envFilePath = $this->getRoot() . "/.env";

        $envContent = explode("\r\n", file_get_contents($envFilePath));

        $configurationSettings = array();

        foreach ($envContent as $row) {
            $row = str_replace(' ', '', $row);

            if (strpos($row, '=') !== false) {
                $row_parse = explode('=', $row);

                $config_key = $row_parse[0];
                $config_val = $row_parse[1];

                $configurationSettings[$config_key] = $config_val;
            }
        }

        $GLOBALS['config'] = $configurationSettings;
    }

}