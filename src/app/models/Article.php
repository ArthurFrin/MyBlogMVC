<?php

namespace App\Models;

use Core\Model;

class Article extends Model
{
    public function getSlug()
    {
        return getSlug($this->title);
    }

    public function getUrl()
    {
        return '/articles/' . $this->getSlug() . '-' . $this->id;
    }

}