<?php

use App\Models\Cabine;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MultiLanguageTraitTest extends TestCase
{
    /* use RefreshDatabase; */

    public function test_it_returns_localized_value_for_multi_language_fields()
    {
        $cabine = Cabine::create([
            'back_wall' => 'Some value in the default locale'
            // Set other fields as needed
        ]);

        // Set the current locale to a specific language
        session(['locale' => 'fr']);

        // Set the value of one of the fields in the current locale
        $cabine->translations()->create([
            'locale' => 'fr',
            'back_wall' => 'Une valeur en français'
            // Set other fields as needed
        ]);

        // Access the field on the model instance
        $localizedValue = $cabine->back_wall;

        // Assert that the returned value is the one set in the current locale
        $this->assertEquals('Une valeur en français', $localizedValue);
    }
}
