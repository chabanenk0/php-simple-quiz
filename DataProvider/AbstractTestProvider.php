<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 23.01.16
 * Time: 15:02
 */

namespace Chabanenko\SimpleQuiz\DataProvider;


abstract class AbstractTestProvider
{
    /**
     * This function should return term => value array for questions
     *
     * @return array
     */
    abstract public function getFunctionTermsQuestions();

    public function getRandomQuestionByTerm()
    {
        $terms = $this->getFunctionTermsQuestions();

        $n = count($terms);

        $randomNumber = rand(0, $n - 1);

        $correctTerm =  array_keys($terms)[$randomNumber];

        $correctDescription = $terms[$correctTerm];
        $chosenKeys = [$correctTerm];
        $chosenDescriptions = [$correctDescription];

        for ($i = 0; $i < 3; $i++) {
            $incorrectItem = $this->getIncorrectItem($terms, $chosenKeys);
            $chosenKeys[] = $incorrectItem['key'];
            $chosenDescriptions[] = $incorrectItem['description'];
        }
        shuffle($chosenDescriptions);

        return [
            'term1' => $chosenKeys[0],
            'description1' => $chosenDescriptions[0],
            'term2' => $chosenKeys[1],
            'description2' => $chosenDescriptions[1],
            'term3' => $chosenKeys[2],
            'description3' => $chosenDescriptions[2],
            'term4' => $chosenKeys[3],
            'description4' => $chosenDescriptions[3],
            'correctTerm' => $correctTerm,
            'correctDescription' => $correctDescription,
            'correctItemNumber' => 1 + array_search($correctDescription, $chosenDescriptions),
        ];
    }

    protected function getIncorrectItem($terms, $chosenKeys)
    {
        $n = count($terms);
        do {
            $newI = rand(0, $n - 1);
            $newKey = array_keys($terms)[$newI];
        } while (in_array($newKey, $chosenKeys));
        return [
            'key' => $newKey,
            'description' => $terms[$newKey],
        ];
    }

    public function getRandomQuestionByDescription()
    {
        $terms = $this->getFunctionTermsQuestions();

        $n = count($terms);

        $randomNumber = rand(0, $n - 1);

        $correctTerm =  array_keys($terms)[$randomNumber];

        $correctDescription = $terms[$correctTerm];
        $chosenKeys = [$correctTerm];
        $chosenDescriptions = [$correctDescription];

        for ($i = 0; $i < 3; $i++) {
            $incorrectItem = $this->getIncorrectItem($terms, $chosenKeys);
            $chosenKeys[] = $incorrectItem['key'];
            $chosenDescriptions[] = $incorrectItem['description'];
        }
        shuffle($chosenDescriptions);

        return [
            'description' => $correctTerm,
            'description1' => $chosenDescriptions[0],
            'description2' => $chosenDescriptions[1],
            'description3' => $chosenDescriptions[2],
            'description4' => $chosenDescriptions[3],
            'correctDescription' => $correctDescription,
            'correctDescriptionNumber' => 1 + array_search($correctDescription, $chosenDescriptions),
        ];
    }

}