namespace Sabbir\Codadmin\Plugin\Method\CashOnDelivery;

use Magento\Customer\Model\Session as CustomerSession;
use Magento\Backend\Model\Auth\Session as BackendSession;
use Magento\OfflinePayments\Model\CashOnDelivery;

class Avilable {

protected $customerSession;
protected $backendSession;
 public function __construct{
 CustomerSession $customerSession, BackendSession $backendSession
 }{
	 $this->customerSession = $customerSession;
	 $this->backednSession = $backendSession;
 }
 
 public function afterIsAvilable(CashoneDelivery $subject, $result){
 if ($this->backednSession->isLoggedIn()){
 return $results;
 } else {
	 return false;
 }
 }
 
}