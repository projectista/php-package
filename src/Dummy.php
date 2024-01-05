<?php

declare(strict_types=1);

namespace {{ .VendorName | Title | NoWS | Alphanumeric }}\{{ .ProjectName | Title | NoWS | Alphanumeric }};

/**
 * @internal
 */
final class Dummy
{
    /**
     * Return true
     */
    public function true(): bool
    {
        return true;
    }

    /*
     * Return false
     */
    public function false(): bool
    {
        return false;
    }
}
