<?php


namespace Bee2Pay\Enum;


class BookingStatus
{
    const CANCELLED = 'CANCELLED';
    const REJECTED = 'REJECTED';
    const UNCONFIRMED = 'UNCONFIRMED';
    const PRE_RESERVATION = 'PRE_RESERVATION';
    const PROCESSING = 'PROCESSING';
    const CONFIRMED = 'CONFIRMED';
}