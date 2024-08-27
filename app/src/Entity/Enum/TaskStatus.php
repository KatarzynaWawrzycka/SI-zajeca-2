<?php
/**
 * Task status.
 */

namespace App\Entity\Enum;

/**
 * Enum TaskStatus.
 */

enum TaskStatus: int
{
    case TASK_TO_DO = 1;
    case TASK_IN_PROGRESS = 2;
    case TASK_DONE = 3;

    /**
     * Get the status label.
     *
     * @return string status label
     */
    public function label(): string
    {
        return match ($this) {
            TaskStatus::TASK_TO_DO => 'label.to_do',
            TaskStatus::TASK_IN_PROGRESS => 'label.in_progress',
            TaskStatus::TASK_DONE => 'label.done'
        };
    }
}