<?php

namespace App\Infolists\Components;

use Filament\Infolists\Components\Entry;

class PostBody extends Entry
{
    protected string $view = 'infolists.components.post-body';

    protected int | \Closure | null $maxLength = 20;

    public function maxLength(int | \Closure | null $maxLength): static
    {
        $this->maxLength = $maxLength;

        return $this;
    }

    public function getMaxLength(): ?int
    {
        return $this->evaluate($this->maxLength);
    }
}
