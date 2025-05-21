<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Patient;
use Illuminate\Support\Arr;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $color = ['red', 'green', 'blue', 'yelloo', 'purple', 'orange', 'white', 'pink'];
        $name = ['محمد علي حسن', 'أحمد عبد الله خالد', 'خالد سعيد محمد', 'علي حسين محمود', 'محمود عمر إبراهيم', 'ياسر كمال عبد الرحمن', 'طارق ناصر صلاح', 'سالم وليد راشد' ];
        $gender = ['male', 'female'];
        $social_status = ['married', 'single', 'divorced', 'widowed'];
        $locations = ['حضرموت - الشحر', 'حضرموت - غيل باوزير', 'حضرموت - الشحر - الديس', 'حضرموت - المكلا - ريسوت', 'حضرموت - المكلا - القف', 'حضرموت - المكلا - حي النور', 'حضرموت - المكلا - حي السلام', 'حضرموت - المكلا - حي الوحدة', 'حضرموت - المكلا - حي الثورة', 'حضرموت - المكلا - حي 14 أكتوبر', 'حضرموت - المكلا - حي النهضة', 'حضرموت - المكلا - حي المعلا', 'حضرموت - الشحر - حي الفتح', 'حضرموت - الشحر - حي النصر', 'حضرموت - غيل باوزير - المركز', 'حضرموت - سيئون - حي النهضة' ];
        return [
            'name' => Arr::random($name),
            'age' => fake()->numberBetween(2, 100),
            'place_of_birth' => fake()->word(),
            'birthday' => fake()->date(),
            'gender' => Arr::random($gender),
            'social_status' => Arr::random($social_status),
            'profession' => fake()->word(),
            'nationality' => fake()->word(),
            'card_number' => fake()->word(),
            'file_number' => fake()->numberBetween(1000, 100000),
            'file_colors' => Arr::random($color),
            'permanent_address' => Arr::random($locations),
            'temporary_address' => fake()->word(),
            'near_mosque' => fake()->word(),
            'phone_number' => fake()->phoneNumber(),
            'incident_date' => fake()->date(),
            'previous_treatment' => fake()->boolean(),
            'chemotherapy' => fake()->boolean(),
            'radiotherapy' => fake()->boolean(),
            'surgery' => fake()->boolean(),
            'site_of_tumor' => fake()->word(),
            'type_of_tumor' => fake()->word(),
            'status' => fake()->word(),
            'doctors_name' => fake()->word(),
            'speciality' => fake()->word(),
            'reported_by' => fake()->word(),
            'is_smokeout' => fake()->boolean(),
            'is_khat' => fake()->boolean(),
            'is_chwingtobaco' => fake()->boolean(),
            'date_of_last_contact' => fake()->date(),
            'cause_of_death' => fake()->word(),
            'notes_re' => fake()->text(),
        ];
    }
}
