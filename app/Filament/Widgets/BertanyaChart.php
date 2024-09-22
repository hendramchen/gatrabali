<?php

namespace App\Filament\Widgets;

use App\Models\Answer;
use App\Models\Question;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class BertanyaChart extends ChartWidget
{
    protected static ?string $heading = 'Grafik User Bertanya';

    protected function getData(): array
    {
        $data = Trend::model(Question::class)
            ->between(
                start: now()->subYear(),
                end: now(),
            )
            ->perMonth()
            ->count();

        $dataAnswer = Trend::model(Answer::class)
            ->between(
                start: now()->subYear(),
                end: now(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Pertanyaan',
                    'data' => $data->map(fn(TrendValue $value) => $value->aggregate),
                ],
                [
                    'label' => 'Jawaban',
                    'data' => $dataAnswer->map(fn(TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn(TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
