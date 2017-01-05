<?php

namespace Tests;

use Mockery;
use ThiAlves\Auditing\AuditQueuedModels;

class AuditingQueuedAuditTest extends AbstractTestCase
{
    public function testQueueAudit()
    {
        $job = new AuditQueuedModels('auditable');

        $manager = Mockery::mock('ThiAlves\Auditing\AuditorManager');
        $manager->shouldReceive('audit')->once()->with('auditable');

        $job->handle($manager);
    }
}
