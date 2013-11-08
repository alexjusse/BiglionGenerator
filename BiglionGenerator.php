<?
/*
 * @author La2ha (http://la2ha.ru)
 * @email la2ha@la2ha.com
 * */
class BiglionGenerator
{
    private static $abc = array(
        'Z' => 1,
        1 => 2,
        2 => 3,
        3 => 4,
        4 => 5,
        5 => 6,
        6 => 7,
        7 => 8,
        8 => 9,
        9 => 'A',
        'A' => 'B',
        'B' => 'C',
        'C' => 'D',
        'D' => 'E',
        'E' => 'F',
        'F' => 'G',
        'G' => 'H',
        'H' => 'I',
        'I' => 'J',
        'J' => 'K',
        'K' => 'L',
        'L' => 'M',
        'M' => 'N',
        'N' => 'O',
        'O' => 'P',
        'P' => 'Q',
        'Q' => 'R',
        'R' => 'S',
        'S' => 'T',
        'T' => 'U',
        'U' => 'V',
        'V' => 'W',
        'W' => 'X',
        'X' => 'Y',
        'Y' => 'Z'
    );

    public static function get_next($code)
    {
        $code_array = str_split($code);
        $i = count($code_array);
        $change_next = true;
        while ($i > 0) {
            $i--;
            if ($code_array[$i] != end(self::$abc)) $change_next = false;
            $code_array[$i] = self::$abc[$code_array[$i]];
            if (!$change_next) break;
        }
        return implode('', $code_array);


    }

}

