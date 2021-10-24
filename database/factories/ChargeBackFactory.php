<?php

namespace Database\Factories;

use App\Models\ChargeBack;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChargeBackFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ChargeBack::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $chargeback = ['1' => '4837','2' => '68','3' => '10'];
        return [
            'card_id'=> $this->faker->numberBetween(3,12),
            'sell_date' => $this->faker->dateTime(),
            'amount' => floor($this->faker->numberBetween(150,10100) / 10) * 10,
            'authorization_number' => sprintf("%06d", $this->faker->numberBetween(0,100000)),
            'case_number' =>  $this->faker->date('d/m/Y') .'-'. $this->faker->numberBetween(0,100),
            'contract' => sprintf("%07d", $this->faker->numberBetween(0,9999999)),
            'entity_id' => 1,
            'operative_id' =>  $this->faker->numberBetween(1,4),
            'buyer_name' => $this->faker->firstName(),
            'buyer_surname' => $this->faker->lastName() . " " . $this->faker->lastName(),
            'phone_number' => '55' .  $this->faker->numberBetween(0, 99999999),
            'email' => $this->faker->safeEmail(),
            'ip' => $this->faker->ipv4(),
            'street' => $this->faker->address(),
            'number' => $this->faker->numberBetween(0,100),
            'locality_id' => $this->faker->numberBetween(0,302130),
            'city_id' => $this->faker->numberBetween(1,2498),
            'state_id' => $this->faker->numberBetween(1,32),
            'country_id' => $this->faker->numberBetween(1,242),
            'zip_code' => sprintf("%06d", $this->faker->numberBetween(1,99999)),
            'chargeback_types_id' => $chargeback[$this->faker->numberBetween(1,3)]
        ];
    }
}
