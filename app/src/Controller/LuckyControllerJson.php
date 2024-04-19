<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyControllerJson
{
    #[Route("/api")]
    public function jsonNumber(): Response
    {
        $number = random_int(0, 100);

        $data = [
            '/' => 'home',
            '/about' => 'about',
            '/report' => 'report',
            '/lucky' => 'lucky number',
        ];

        // return new JsonResponse($data);

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route("/api/quotes")]
    public function jsonQuotes(): Response
    {

        $quotes = [
            "Eyes are the window to the soul.",
            "The closest you'll ever be to being in two places at the same time.",
            "The more you know about cars, the more you want a BMW."
        ];

        $randomQuote = $quotes[array_rand($quotes)];

        $currentDate = new \DateTime();
        $timestamp = $currentDate->getTimestamp();

        $response = [
            'quote' => $randomQuote,
            'date' => $currentDate->format('Y-m-d'),
            'timestamp' => $timestamp
        ];

        return new JsonResponse($response);
    }
}