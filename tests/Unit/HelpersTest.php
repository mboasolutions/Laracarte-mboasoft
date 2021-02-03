<?php

namespace Tests\Unit;

use Tests\TestCase;

class HelpersTest extends TestCase
{
    /** @test */
    public function page_title_should_return_the_base_title_if_title_is_empty()
    {
        //$base_title = 'Laracarte - List of artisans';

        $this->assertEquals('Laracarte - List of artisans', page_title(''));
    }

    /** @test */
    public function page_title_should_return_the_correct_title_if_title_is_provided()
    {
        //$base_title = config('app.name').' - List of artisans';

        $this->assertEquals('About | Laracarte - List of artisans', page_title('About'));
    }


    /** @test */
    public function set_active_route_should_return_the_correct_class_base_on_a_given_route()
    {
        $this->get(route('root_path'));
        $this->assertEquals('active', set_active_route('root_path'));
        $this->assertEquals('', set_active_route('about_path'));

        $this->get(route('contact_path'));
        $this->assertEquals('active', set_active_route('contact_path'));
        $this->assertEquals('', set_active_route('root_path'));
        $this->assertEquals('', set_active_route('about_path'));


    }

}
