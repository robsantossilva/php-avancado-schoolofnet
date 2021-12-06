<?php 

namespace SON\AbstractFactory;

interface AbstractLivroBanco {
    public function getTitle(): string;
    public function getAuthor(): string;
    public function getPages(): string;
}