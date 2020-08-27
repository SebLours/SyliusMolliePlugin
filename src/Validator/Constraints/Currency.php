<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace BitBag\SyliusMolliePlugin\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

final class Currency extends Constraint
{
    /** @var string */
    public $message;

    public function validatedBy(): string
    {
        return 'bitbag_sylius_mollie_plugin_currency';
    }

    public function getTargets(): string
    {
        return self::CLASS_CONSTRAINT;
    }
}
