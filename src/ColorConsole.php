<?php

/**
 * @author MrAnyx
 */

namespace RainbowColor;

class ColorConsole
{
    public const BLACK = 30;
    public const RED = 31;
    public const GREEN = 32;
    public const BROWN = 33;
    public const BLUE = 34;
    public const MAGENTA = 35;
    public const CYAN = 36;
    public const LIGHTGRAY = 37;

    private const DEFAULT = 0;
    private const PREFIX = "\033[";
    private const BACKGROUND = "7;";

    /**
     * @param string $content
     * @param int $color
     * @param bool $hasBackground
     * @return string
     */
    public static function color(string $content, int $color, bool $hasBackground = false): string
    {
        $contentWithPotentialBackground = $hasBackground ? " " . $content . " " : $content;
        return self::displayPrefix($color, $hasBackground) . $contentWithPotentialBackground . self::resetDefaultColor();
    }

    /**
     * @param int $color
     * @param bool $hasBackground
     * @return string
     */
    private static function displayPrefix(int $color, bool $hasBackground): string
    {
        $background = $hasBackground ? self::BACKGROUND : "";
        return self::PREFIX . $background . $color . "m";
    }

    /**
     * @return string
     */
    private static function resetDefaultColor(): string
    {
        return self::displayPrefix(self::DEFAULT, false);
    }
}