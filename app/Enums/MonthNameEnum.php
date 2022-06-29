<?php

declare(strict_types=1);

namespace App\Enums;

enum MonthNameEnum: string
{
    case NOM_JANUARY = 'leden';
    case GEN_JANUARY = 'ledna';
    case NOM_FEBRUARY = 'únor';
    case GEN_FEBRUARY = 'února';
    case NOM_MARCH = 'březen';
    case GEN_MARCH = 'března';
    case NOM_APRIL = 'duben';
    case GEN_APRIL = 'dubna';
    case NOM_MAY = 'květen';
    case GEN_MAY = 'května';
    case NOM_JUNE = 'červen';
    case GEN_JUNE = 'června';
    case NOM_JULY = 'červenec';
    case GEN_JULY = 'července';
    case NOM_AUGUST = 'srpen';
    case GEN_AUGUST = 'srpna';
    case NOM_SEPTEMBER = 'září';
    case NOM_OCTOBER = 'říjen';
    case GEN_OCTOBER = 'října';
    case NOM_NOVEMBER = 'listopad';
    case GEN_NOVEMBER = 'listopadu';
    case NOM_DECEMBER = 'prosinec';
    case GEN_DECEMBER = 'prosince';
}