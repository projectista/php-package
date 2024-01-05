<?php

use Company\Project\Dummy;

it('works correctly', function () {
    $dummy = new Dummy();

    expect($dummy->true())->toBeTrue()
        ->and($dummy->false())->toBeFalse();
});
