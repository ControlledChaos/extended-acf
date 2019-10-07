<?php

/*
 * This file is part of WordPlate.
 *
 * (c) Vincent Klaiber <hello@doubledip.se>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace WordPlate\Tests\Acf\Fields;

use PHPUnit\Framework\TestCase;
use WordPlate\Acf\Fields\Image;

class ImageTest extends TestCase
{
    public function testType()
    {
        $field = Image::make('Image')->toArray();
        $this->assertSame('image', $field['type']);
    }

    public function testPreviewSize()
    {
        $field = Image::make('Preview Size')->previewSize('large')->toArray();
        $this->assertSame('large', $field['preview_size']);
    }
}
