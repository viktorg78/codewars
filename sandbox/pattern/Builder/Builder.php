<?php

namespace pattern\Builder;

interface Builder
{
   public function makeHeader();
   public function makeBody();
   public function makeFooter();
   public function makeCustom();
   public function getText();
}
