<?php

namespace Survey\SurveyPage\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class Test extends \Magento\Framework\App\Action\Action {
public function execute()
{
        // 1. POST request : Get booking data
        $post = (array) $this->getRequest()->getPost();

        if (!empty($post)) {
            // Retrieve your form data
            $firstname   = $post['firstname'];
            $lastname    = $post['lastname'];
            $phone       = $post['phone'];
            $bookingTime = $post['bookingTime'];

            // Doing-something with...

            // Display the succes form validation message
            $this->messageManager->addSuccessMessage('Booking done !');

            // Redirect to your form page (or anywhere you want...)
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setUrl('/survey/test/test');

            return $resultRedirect;
        }
        // 2. GET request : Render the booking page 
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}