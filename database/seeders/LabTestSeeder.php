<?php

namespace Database\Seeders;

use App\Models\CheckupCategory;
use App\Models\LabTest;
use Illuminate\Database\Seeder;

class LabTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $HEMATOLOGY = CheckupCategory::where('name', 'HEMATOLOGY')->first('id');
        LabTest::firstOrCreate([
            'name'  => 'Hemograrn',
            'unit'  => '35',
            'reference_min'  => '35',
            'reference_max'  => '37',
            'checkup_category_id'  => $HEMATOLOGY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Hgb',
            'unit'  => '9',
            'reference_min'  => '9',
            'reference_max'  => '11',
            'checkup_category_id'  => $HEMATOLOGY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'WBC-Total',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $HEMATOLOGY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'WBC-Differential',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $HEMATOLOGY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'ESR',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $HEMATOLOGY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'MPS',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $HEMATOLOGY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'APPTT',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $HEMATOLOGY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'B.T',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $HEMATOLOGY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'G.T',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $HEMATOLOGY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Blood Flim',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $HEMATOLOGY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Bone Marrow',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $HEMATOLOGY->id,
        ]);
        $BIOCHEMISTRY = CheckupCategory::where('name', 'BIOCHEMISTRY')->first('id');
        LabTest::firstOrCreate([
            'name'  => 'FBG',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'PPBG',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'RBG',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'HBA tc',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'BUN',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Creatiine',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Calcium',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Chloride',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'ALT',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'AST',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'CK',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Albumin',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);

        $BIOCHEMISTRY = CheckupCategory::where('name', 'SEROLOGY')->first('id');
        LabTest::firstOrCreate([
            'name'  => 'ASO',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'CRP',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'RH',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'TIBC',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'ABO grouping-Rh',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Brucells',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'HIV(Screen)',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'HBS Ag(ELISA)',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'H.Pyloni',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);

        $BIOCHEMISTRY = CheckupCategory::where('name', 'Endoorinology')->first('id');
        LabTest::firstOrCreate([
            'name'  => 'T3',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'T4',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'TSH',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'LH',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'FSH',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Prolactin',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Testosterone',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Estradini',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);

        $BIOCHEMISTRY = CheckupCategory::where('name', 'Immunology')->first('id');
        LabTest::firstOrCreate([
            'name'  => 'AMA',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'ASMA',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'ANCA',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Sc1-70',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'LKM antibodies',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        $BIOCHEMISTRY = CheckupCategory::where('name', 'Tumor Markers')->first('id');
        LabTest::firstOrCreate([
            'name'  => 'AFP',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'CEA',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'PSA',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'B-HCG',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'CA-125',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'CA-15-3',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'CA 19.9',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => '5-HIAA',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'SCC',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Anti-ds DNA',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'CA-15-3',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'CA 19.9',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => '5-HIAA',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'SCC',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'B2 micoglobulid',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        $BIOCHEMISTRY = CheckupCategory::where('name', 'Microsco/Bacterio')->first('id');
        LabTest::firstOrCreate([
            'name'  => 'Gneral Urine Ex',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Gneral Stool Ex',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Stool Occult Blood',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Gram Stain',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Tubotculin Test',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Linine Culture',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        $BIOCHEMISTRY = CheckupCategory::where('name', 'Urine Chemistry')->first('id');
        LabTest::firstOrCreate([
            'name'  => 'Greatinine Clearance',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Protein 24 hr',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Creatinine',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Lirea',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Calcium',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Sotium',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Magnesium',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Chloride',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Uric Acid',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
        LabTest::firstOrCreate([
            'name'  => 'Amy Lase',
            'unit'  => '54',
            'reference_min'  => '54',
            'reference_max'  => '58',
            'checkup_category_id'  => $BIOCHEMISTRY->id,
        ]);
    }
}
