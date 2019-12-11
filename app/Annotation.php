<?php
namespace App;
use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Swagger\Annotations as SWG;

/**
 * @SWG\Swagger(
 * 	   basePath="/",
 *     schemes={"http","https"},
 *     produces={"application/json"},
 * 	   consumes={"application/json"},
 * 		@SWG\Info(
 * 			description="REST API",
 * 			termsOfService="terms",
 * 			version="1.0.0",
 *          title="Sample API Documentation",
 *         @SWG\Contact(
 *             email="aldian@inarts.co.id"
 *         ),
 * 		),
 *      @SWG\Definition(
 * 		    definition="UpdateUser",
 * 			required={"name", "email", "password","api_token"},
 * 			@SWG\Property(property="name", type="string"),
 * 			@SWG\Property(property="email", type="string"),
 * 			@SWG\Property(property="password", type="string"),
 * 			@SWG\Property(property="api_token", type="string"),
 *      ),
 *      @SWG\Definition(
 * 		    definition="AddUser",
 * 			required={"id","name", "email", "password","api_token"},
 *  		@SWG\Property(property="id", type="integer"),
 * 			@SWG\Property(property="name", type="string"),
 * 			@SWG\Property(property="email", type="string"),
 * 			@SWG\Property(property="password", type="string"),
 * 			@SWG\Property(property="api_token", type="string"),
 *      )
 * )
 */
 
/**
 * tags : "User Management"
* @SWG\Get(
 *   path="/user",
 *   summary="List of Users",
 *   @SWG\Response(
 *     response=200,
 *     description="Working"
 *   ),
 *   @SWG\Response(
 *     response="default",
 *     description="an ""unexpected"" error"
 *   )
 * )
 */
/**
* @SWG\Get(
 *   path="/detailUser/{id}",
 *   summary="User's Data by ID",
 *  @SWG\Parameter(
 * 			name="id",
 * 			in="path",
 * 			required=true,
 * 			type="string",
 * 			description="UserID",
 * 	),
 *   @SWG\Response(
 *     response=200,
 *     description="Working"
 *   ),
 *   @SWG\Response(
 *     response="default",
 *     description="an ""unexpected"" error"
 *   )
 * )
 */
/**
* @SWG\Post(
 *   path="/userAdd",
 *   summary="Create New User",
 *  @SWG\Parameter(
 *          name="user",
 * 			in="body",
 * 			required=true,
 *          @SWG\Schema(ref="#/definitions/AddUser")		
 *	 ),
 *   @SWG\Response(
 *     response=200,
 *     description="Working"
 *   ),
 *   @SWG\Response(
 *     response="default",
 *     description="an ""unexpected"" error"
 *   )
 * )
 */
/**
 
* @SWG\Put(
 *   path="/userUpdate/{id}",
 *   operationId="createUser",
 *   summary="Update User by ID",
 *  @SWG\Parameter(
 * 			name="id",
 * 			in="path",
 * 			required=true,
 * 			type="string",
 * 			description="User ID",
 * 	),
 *   @SWG\Parameter(
 *          name="user",
 * 			in="body",
 * 			required=true,
 *          @SWG\Schema(ref="#/definitions/UpdateUser")		
 *	 ),
 *   @SWG\Response(
 *     response=200,
 *     description="Working"
 *   ),
 *   @SWG\Response(
 *     response="default",
 *     description="an ""unexpected"" error"
 *   )
 * )
 */
/**
* @SWG\Delete(
 *   path="/userDelete/{id}",
 *   summary="Delete User By ID",
 * @SWG\Parameter(
 * 			name="id",
 * 			in="path",
 * 			required=true,
 * 			type="string",
 * 			description="User ID",
 * 	),
 *   @SWG\Response(
 *     response=200,
 *     description="Working"
 *   ),
 *   @SWG\Response(
 *     response="default",
 *     description="an ""unexpected"" error"
 *   )
 * )
 */
  
class Annotation extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;
}