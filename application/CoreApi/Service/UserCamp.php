<?php

namespace CoreApi\Service;

class UserCamp extends ServiceAbstract
{

	/**
	 * @var \Doctrine\ORM\EntityManager
	 * @Inject EntityManager
	 */
	protected $em;
	
    
    public function index()
    {
    	throw new \Exception("Not Implemented Exception");
    }
    
    
    protected function create()
    {
    // Todo UseCase:
    	/*
    * create new usercamp entity
    	* (This is to invite a user)
    */
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
	
	protected function invite($user, $camp, $role)
	{
		// Todo UseCase:
		/*
		 * authenticated User invites $user to $camp with $role
		 */
	}
	
	protected function acceptRequest($usercamp)
	{
		// Todo UseCase:
		/*
		 * authenticated User accepts request
		 */
	}
	
	protected function acceptInvitation($usercamp)
	{
		// Todo UseCase:
		/*
		 * authenticated User accepts invitation
		 */
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
		
	}
	
}
