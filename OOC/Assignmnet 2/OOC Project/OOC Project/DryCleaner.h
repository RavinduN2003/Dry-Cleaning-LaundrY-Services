#pragma once
#include <iostream>
#include "RegisteredUser.h"
#include "Order.h"

using namespace std;

class DryCleaner : public RegisteredUser
{
public:
	DryCleaner();
	DryCleaner(string uName, int pw, string rName, int uId);
	void viewOrder();
	string updateOrderDetails(string oName, string oType, double oPrice);
	void acceptOrder(string oName, string oType, double oPrice);
	~DryCleaner();

};

