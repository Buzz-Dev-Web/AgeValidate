<?php

/**
 * @package   Buzz_AgeValidate
 * @author    github.com/mauricio-tonny
 * @copyright Copyright (c)
 * @version   1.1
 */

namespace Buzz\AgeValidate\Plugin;

use Magento\Customer\Api\AccountManagementInterface;
use Magento\Customer\Api\Data\CustomerInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Stdlib\DateTime\DateTime;

class AccountManagementPlugin
{
    /**
     * @var DateTime
     */
    private $dateTime;

    /**
     * @param DateTime $dateTime
     */
    public function __construct(DateTime $dateTime)
    {
        $this->dateTime = $dateTime;
    }

    /**
     * Validate customer age before creating account
     *
     * @param AccountManagementInterface $subject
     * @param CustomerInterface $customer
     * @return void
     * @throws LocalizedException
     */
    public function beforeCreateAccount(AccountManagementInterface $subject, CustomerInterface $customer)
    {
        $dob = $customer->getDob();
        if (!$dob) {
            throw new LocalizedException(__('Please enter your date of birth.'));
        }

        $dobTimestamp = strtotime($dob);
        $age = $this->dateTime->date('Y') - date('Y', $dobTimestamp);
        if ($age < 18) {
            throw new LocalizedException(__('You must be at least 18 years old to create an account.'));
        }
    }
}
