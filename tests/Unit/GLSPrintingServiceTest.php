<?php


namespace Webidentity\GLSPrintingService\Tests\Unit;

use Illuminate\Support\Facades\Log;
use Webidentity\GLSPrintingService\Client\ApplicationServices;
use Webidentity\GLSPrintingService\Client\printlabel_result;
use Webidentity\GLSPrintingService\GLSPrintingService;
use Webidentity\GLSPrintingService\Tests\Stubs\PrintLabelResultSuccessful;
use Webidentity\GLSPrintingService\Tests\TestCase;

class GLSPrintingServiceTest extends TestCase
{
    /** @var Webidentity\GLSPrintingService\Logger  */
    protected $logger;

    /** @var ApplicationServices */
    protected $clientMock;

    protected function setUp(): void
    {
        parent::setUp();

        /** @var ApplicationServices $clientMock */
        $this->clientMock = $this->createMock(ApplicationServices::class);

        $this->app->singleton(GLSPrintingService::class, function () {
            return new GLSPrintingService(
                $this->clientMock,
                app(config('gls-printing-service.logger')),
                config('gls-printing-service.log-http-communication')
            );
        });
    }

    /** @test */
    public function a_printing_label_is_printed_and_not_logged()
    {
        config(['gls-printing-service.log-http-communication' => false]);

        Log::shouldReceive('info')->never();

        $this->clientMock->expects($this->any())->method('printlabel')
                         ->willReturn(new PrintLabelResultSuccessful());

        /** @var printlabel_result $response */
        $response = app(GLSPrintingService::class)->printlabel($this->printLabelData());

        $this->assertTrue($response->successfull);
    }

    /** @test */
    public function a_printing_label_is_printed_and_logged()
    {
        Log::shouldReceive('info')->once()
           ->andReturn('REQUEST:' . $this->clientMock->__getLastRequest());

        Log::shouldReceive('info')->once()
           ->andReturn('RESPONSE:' . $this->clientMock->__getLastResponse());

        $this->clientMock->expects($this->any())->method('printlabel')
                         ->willReturn(new PrintLabelResultSuccessful());

        /** @var printlabel_result $response */
        $response = app(GLSPrintingService::class)->printlabel($this->printLabelData());

        $this->assertTrue($response->successfull);
    }

    /** @test */
    public function a_printing_label_should_throw_an_exception_and_log_the_message()
    {
        config(['gls-printing-service.log-http-communication' => false]);

        Log::shouldReceive('error')->once()
           ->andReturn('Random exception.');

        $this->clientMock->expects($this->any())->method('printlabel')
                         ->willThrowException(new \Exception('Random exception.'));

        $response = app(GLSPrintingService::class)->printlabel($this->printLabelData());

        $this->assertNull($response);
    }

    protected function printLabelData()
    {
        $data = [
            'username'       => '...',
            'password'       => '...',
            'sender_id'      => '...',
            'sender_name'    => 'Peter Szelepcsenyi',
            'sender_address' => 'Brezova 488/4',
            'sender_city'    => 'Lipt. Mikulas',
            'sender_zipcode' => '03104',
            'sender_country' => 'SK',
            'sender_contact' => 'Peter Szelepcsenyi',
            'sender_phone'   => '0911123456',
            'sender_email'   => 'peter@szelepcsenyi.net',

            'consig_name' => 'Consig - Peter Sz',
            'consig_address' => 'Consig - Brezova 488/4',
            'consig_city' => 'Consig - Liptovsky Mikulas',
            'consig_zipcode' => '03104',
            'consig_country' => 'Liptovsky Mikulas',
            // Not mandatory
            'consig_contact' => 'Peter Szelepcsenyi',
            'consig_phone' => '0911123456',
            'consig_email' => 'peter@szelepcsenyi.net',
            //
            'client_ref' => '',
            'cod_amount' => 0,
            'cod_ref' => '',
            'pcount' => 1,
            'pickup_date' => '2019-12-25',
            'services' => array(
                "FDS" => "peter@szelepcsenyi.net",
            ),
        ];

        $data['hash'] = app(GLSPrintingService::class)->getHash($data);

        return $data;
    }

}