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

    private function getRandomQuestion()
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
        $shuffledIndices = range(0, count($chosenKeys) - 1);
        shuffle($shuffledIndices);
        $chosenKeys = $this->reorderArrayByNumbers($chosenKeys, $shuffledIndices);
        $chosenDescriptions = $this->reorderArrayByNumbers($chosenDescriptions , $shuffledIndices);

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

    private function reorderArrayByNumbers($array, $numbers)
    {
        $newArray = [];
        for ($i = 0; $i < count($numbers); $i++) {
            $newArray[$i] = $array[$numbers[$i]];
        }

        return $newArray;
    }
    public function getRandomQuestionByTerm()
    {
        return $this->getRandomQuestion();
    }

    public function getRandomQuestionByDescription()
    {
        return $this->getRandomQuestion();
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

}