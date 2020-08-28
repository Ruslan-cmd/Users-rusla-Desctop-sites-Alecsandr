<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Получить пароль пользователя.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->title;
    }

    /**
     * Получить адрес e-mail для отправки напоминания о пароле.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        return $this->description;
    }
}

