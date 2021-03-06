<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace BitBag\SyliusMolliePlugin\Transitions\PartialShip;

final class ShipmentTransitions
{
    public const GRAPH = 'sylius_shipment';

    public const TRANSITION_CREATE_AND_SHIP = 'create_and_ship';

    private function __construct()
    {
    }
}
