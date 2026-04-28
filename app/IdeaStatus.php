<?php

namespace App;

enum IdeaStatus: string
{
    case Pending = 'pending';
    case Completed = 'completed';
    case Ongoing = 'ongoing';

    public function label(): string {
        return match ($this) {
            self::Pending => 'Pending',
            self::Ongoing => 'Ongoing',
            self::Completed => 'Completed'
        };

    }
}
