#pragma once
#include <iostream>
#include "Order.h"

using namespace std;

class Order
{
private:
	string orderName;
	string orderType;
	double orderPrice;
	int qty;

public:
	Order();
	Order(string oName,string oType,double oPrice);
	void updateOrderDetails(string oName, string oType, double oPrice);
	void getOrderDetails();
	double calculateOrderCost(int oQty);
	~Order();
};

