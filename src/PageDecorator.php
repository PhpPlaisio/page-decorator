<?php
declare(strict_types=1);

namespace Plaisio\PageDecorator;

use Plaisio\Response\Response;

/**
 * Decorator for creating a valid HTML document given the payload of a page.
 */
interface PageDecorator
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Adds elements to the (actual) content of a page to create a valid HTML document.
   *
   * @param string $content The content of the page.
   *
   * @return Response
   */
  public function decorate(string $content): Response;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
