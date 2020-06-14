<?php
declare(strict_types=1);

namespace Plaisio\PageDecorator;

/**
 * Factory for creating page decorators.
 */
interface PageDecoratorFactory
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Creates a page decorator.
   *
   * @param string $name The name of the requested page decorator.
   *
   * @return PageDecorator
   */
  public function create(string $name): PageDecorator;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
