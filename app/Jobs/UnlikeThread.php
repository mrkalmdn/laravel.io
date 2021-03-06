<?php

namespace App\Jobs;

use App\Models\Thread;
use App\Models\User;

final class UnlikeThread
{
    /**
     * @var \App\Models\Thread
     */
    private $thread;

    /**
     * @var \App\Models\User
     */
    private $user;

    public function __construct(Thread $thread, User $user)
    {
        $this->thread = $thread;
        $this->user = $user;
    }

    public function handle(): void
    {
        $this->thread->dislikedBy($this->user);
    }
}
