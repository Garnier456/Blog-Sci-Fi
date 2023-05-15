<?php

namespace App\Service;

enum UserRole: string {
    case ADMIN = 'ADMIN';
    case USER = 'USER';
}