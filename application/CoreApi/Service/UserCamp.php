<?php

namespace CoreApi\Service;

class UserCamp extends ServiceAbstract
{

	/**
	 * @var \Doctrine\ORM\EntityManager
	 * @Inject EntityManager
	 */
	protected $em;
	
   /**
	 * @var \CoreApi\Service\User
	 * @Inject \CoreApi\Service\User
	 */
	protected $userService;
	
    
   public function index()
   {
   	throw new \Exception("Not Implemented Exception");
   }
    
    
   protected function create(\Core\Entity\User $user,\Core\Entity\Camp $camp)
   {
    
    	$userCamp = new \Core\Entity\UserCamp($user, $camp);

		$this->em->persist($userCamp);

		return $userCamp;

   }
	
	public function get($user, $camp)
	{
		// Todo UseCase:
		/*
		 * return usercamp entity
		 */
	}
	
	protected function update()
	{
		throw new \Exception("Use concrete Methods like Invite, Request, Accept");
	}
	
	protected function request($camp, $role)
	{
		// Todo UseCase:
		/*
		 * authenticated User requests a $role in $camp
		 */
	}
	
	protected function invite(\Core\Entity\User $user,\Core\Entity\Camp $camp, $role)
	{

		// Todo:
		/*
		 *	validate rode
		 */

		$userCamp = $this->create($user, $camp);
		$userCamp->setRequestedRole($role);
		$userCamp->acceptRequest($this->userService->get());

	}
	
	protected function acceptRequest($userCamp)
	{
		// Todo UseCase:
		/*
		 * authenticated User accepts request
		 */
	}
	
	protected function acceptInvitation(\Core\Entity\UserCamp $userCamp)
	{
		
		$userCamp->acceptInvitation();

	}
    
    public function delete($usergroup)
    {
    	// Todo UseCase:
    	/*
    	 * Delete usercamp entity
    	 * (This is to kick somebody)
    	 */
    }

	/**
	* Setup ACL. Is used for manual calls of 'checkACL' and for automatic checking
	* @see    CoreApi\Service\ServiceAbstract::_setupAcl()
	* @return void
	*/
	protected function _setupAcl()
	{
		$this->_acl->allow('camp_owner', $this, 'invite');
	}
	
}
