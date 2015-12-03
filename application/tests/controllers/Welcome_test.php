<?php
/**
 * Part of CI PHPUnit Test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Welcome_test extends TestCase
{
	public function test_index()
	{
		$output = $this->request('GET', ['Welcome', 'index']);
		$this->assertContains('<title>Welcome to CodeIgniter</title>', $output);
	}

	public function test_method_404()
	{
		$this->request('GET', ['Welcome', 'method_not_exist']);
		$this->assertResponseCode(404);
	}

	public function test_APPPATH()
	{
		$actual = realpath(APPPATH);
		$expected = realpath(__DIR__ . '/../..');
		$this->assertEquals(
			$expected,
			$actual,
			'Your APPPATH seems to be wrong. Check your $application_folder in tests/Bootstrap.php'
		);
	}
        
        public function test_DummyController() {
            $dummy = new Dummy();
            $dummy->load->model('sogg_model', 'sogg', TRUE);            
            $data['results'] = $dummy->sogg->read();
            $this->assertNotNull($data, "Errore lettura dati");
        }
        
        public function test_Model() {
            $model = new Sogg_model();
            $data['results'] = $model->read();
            $this->assertNotNull($data, "Errore lettura dati");
        }
}
