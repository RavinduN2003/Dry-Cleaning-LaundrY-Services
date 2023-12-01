#pragma once
#include <iostream>
#include "Administrator.h"
#include "DryCleaner.h"
#include "Manager.h"
#include "Order.h"
#include "Service.h"

using namespace std;

class RegisteredUser
{
protected:
	string Username;
	int password;
	string name;
	int userId;

private:
	Order order;

public:
	RegisteredUser();
	RegisteredUser(string uName, int pw, string rName, int uId);
	void login(string uName, int pw);
	void browseServicesAndPrices();//view services and prices from services class
	void updateProfile(string uName, int pw, string rName, int uId);
	void viewOrderHistory();
	string placeOrder(string orderName, string orderType, double orderPrice); //create a new order by using this function
	~RegisteredUser();
};

