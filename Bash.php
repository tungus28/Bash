<?php

final class Bash
{
    /**
     * Exec and return it's output.
     * @param string $cmd A command to call
     * @return string A full output
     */
    public static function exec($cmd)
    {
        $lines = array();
        $code = 0;
        exec($cmd, $lines, $code);
        $output = implode($lines, "\n");
        echo $output;
        if ($code != 0) {
            throw new Exception("failed to execute '{$cmd}'");
        }
        return $output;
    }
}
