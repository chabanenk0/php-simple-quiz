<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 23.01.16
 * Time: 15:02
 */

namespace Chabanenko\SimpleQuiz\DataProvider;


class StringFunctionsTestProvider extends AbstractTestProvider
{
    private function getCypherStringFunctionTermsQuestions()
    {
        return [
            'crc32' => 'Calculates the crc32 polynomial of a string',
            'md5_file' => 'Calculates the md5 hash of a given file',
            'md5' => 'Calculate the md5 hash of a string',
            'sha1_file' => 'Calculate the sha1 hash of a file',
            'sha1' => 'Calculate the sha1 hash of a string',
        ];
    }

    private function getEncodedStringFunctionTermsQuestions()
    {
        return [
            'convert_cyr_string' => 'Convert from one Cyrillic character set to another',
            'convert_uudecode' => 'Decode a uuencoded string',
            'convert_uuencode' => 'Uuencode a string',
            'crypt' => 'One-way string hashing',
            'html_entity_decode' => 'Convert all HTML entities to their applicable characters',
            'htmlentities' => 'Convert all applicable characters to HTML entities',
            'htmlspecialchars_decode' => 'Convert special HTML entities back to characters',
            'htmlspecialchars' => 'Convert special characters to HTML entities',
            'quoted_printable_decode' => 'Convert a quoted-printable string to an 8 bit string',
            'quoted_printable_encode' => 'Convert a 8 bit string to a quoted-printable string',
            'localeconv' => 'Get numeric formatting information',
            'nl_langinfo' => 'Query language and locale information',
            'strip_tags' => 'Strip HTML and PHP tags from a string',
            'stripcslashes' => 'Un-quote string quoted with addcslashes',

        ];
    }

    private function getRegularStringFunctionTermsQuestions()
    {
        return [
            'addcslashes' => 'Quote string with slashes in a C style',
            'addslashes' => 'Quote string with slashes',
            'bin2hex' => 'Convert binary data into hexadecimal representation',
            'chop' => 'Alias of rtrim',
            'chr' => 'Return a specific character',
            'chunk_split' => 'Split a string into smaller chunks',
            'count_chars' => 'Return information about characters used in a string',
            'echo' => 'Output one or more strings',
            'explode' => 'Split a string by string',
            'fprintf' => 'Write a formatted string to a stream',
            'get_html_translation_table' => 'Returns the translation table used by htmlspecialchars and htmlentities',
            'hebrev' => 'Convert logical Hebrew text to visual text',
            'hebrevc' => 'Convert logical Hebrew text to visual text with newline conversion',
            'hex2bin' => 'Decodes a hexadecimally encoded binary string',
            'implode' => 'Join array elements with a string',
            'join' => 'Alias of implode',
            'lcfirst' => 'Make a string\'s first character lowercase',
            'levenshtein' => 'Calculate Levenshtein distance between two strings',
            'ltrim' => 'Strip whitespace (or other characters) from the beginning of a string',
            'metaphone' => 'Calculate the metaphone key of a string',
            'money_format' => 'Formats a number as a currency string',
            'nl2br' => 'Inserts HTML line breaks before all newlines in a string',
            'number_format' => 'Format a number with grouped thousands',
            'ord' => 'Return ASCII value of character',
            'parse_str' => 'Parses the string into variables',
            'print' => 'Output a string',
            'printf' => 'Output a formatted string',
            'quotemeta' => 'Quote meta characters',
            'rtrim' => 'Strip whitespace (or other characters) from the end of a string',
            'setlocale' => 'Set locale information',
            'similar_text' => 'Calculate the similarity between two strings',
            'soundex' => 'Calculate the soundex key of a string',
            'sprintf' => 'Return a formatted string',
            'sscanf' => 'Parses input from a string according to a format',
            'str_getcsv' => 'Parse a CSV string into an array',
            'str_ireplace' => 'Case-insensitive version of str_replace.',
            'str_pad' => 'Pad a string to a certain length with another string',
            'str_repeat' => 'Repeat a string',
            'str_replace' => 'Replace all occurrences of the search string with the replacement string',
            'str_rot13' => 'Perform the rot13 transform on a string',
            'str_shuffle' => 'Randomly shuffles a string',
            'str_split' => 'Convert a string to an array',
            'str_word_count' => 'Return information about words used in a string',
            'strcasecmp' => 'Binary safe case-insensitive string comparison',
            'strchr' => 'Alias of strstr',
            'strcmp' => 'Binary safe string comparison',
            'strcoll' => 'Locale based string comparison',
            'strcspn' => 'Find length of initial segment not matching mask',
            'stripos' => 'Find the position of the first occurrence of a case-insensitive substring in a string',
            'stripslashes' => 'Un-quotes a quoted string',
            'stristr' => 'Case-insensitive strstr',
            'strlen' => 'Get string length',
            'strnatcasecmp' => 'Case insensitive string comparisons using a "natural order" algorithm',
            'strnatcmp' => 'String comparisons using a "natural order" algorithm',
            'strncasecmp' => 'Binary safe case-insensitive string comparison of the first n characters',
            'strncmp' => 'Binary safe string comparison of the first n characters',
            'strpbrk' => 'Search a string for any of a set of characters',
            'strpos' => 'Find the position of the first occurrence of a substring in a string',
            'strrchr' => 'Find the last occurrence of a character in a string',
            'strrev' => 'Reverse a string',
            'strripos' => 'Find the position of the last occurrence of a case-insensitive substring in a string',
            'strrpos' => 'Find the position of the last occurrence of a substring in a string',
            'strspn' => 'Finds the length of the initial segment of a string consisting entirely of characters contained within a given mask.',
            'strstr' => 'Find the first occurrence of a string',
            'strtok' => 'Tokenize string',
            'strtolower' => 'Make a string lowercase',
            'strtoupper' => 'Make a string uppercase',
            'strtr' => 'Translate characters or replace substrings',
            'substr_compare' => 'Binary safe comparison of two strings from an offset, up to length characters',
            'substr_count' => 'Count the number of substring occurrences',
            'substr_replace' => 'Replace text within a portion of a string',
            'substr' => 'Return part of a string',
            'trim' => 'Strip whitespace (or other characters) from the beginning and end of a string',
            'ucfirst' => 'Make a string\'s first character uppercase',
            'ucwords' => 'Uppercase the first character of each word in a string',
            'vfprintf' => 'Write a formatted string to a stream',
            'vprintf' => 'Output a formatted string (accepted an array of arguments)',
            'vsprintf' => 'Return a formatted string',
            'wordwrap' => 'Wraps a string to a given number of characters',
        ];
    }
    public function getFunctionTermsQuestions()
    {
        return array_merge(
            $this->getCypherStringFunctionTermsQuestions(),
            $this->getEncodedStringFunctionTermsQuestions(),
            $this->getRegularStringFunctionTermsQuestions()
        );
    }
}