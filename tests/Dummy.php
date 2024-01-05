<?php

use {{ .VendorName | Title | NoWS | Alphanumeric }}\{{ .ProjectName | Title | NoWS | Alphanumeric }}\Dummy;

it('works correctly', function () {
    $dummy = new Dummy();

    expect($dummy->true())->toBeTrue()
        ->and($dummy->false())->toBeFalse();
});
