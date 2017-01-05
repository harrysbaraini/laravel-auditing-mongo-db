<?php

namespace ThiAlves\Auditing;

use Illuminate\Support\Facades\Config;
use ThiAlves\Auditing\Contracts\Dispatcher;

trait Auditor
{
    /**
     * Audit the model auditable.
     *
     * @return void
     */
    public function audit()
    {
        app(Dispatcher::class)->makeAudit($this);
    }

    /**
     * Get the Auditors.
     *
     * @return array
     */
    public function getAuditors()
    {
        return isset($this->auditors) ? $this->auditors : Config::get('auditing.default_auditor');
    }
}
