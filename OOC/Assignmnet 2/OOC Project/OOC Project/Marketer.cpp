#include "Marketer.h"
#include "Campaign.h"

Campaign* campaign; //creating a pointer varible to create a dynamic memory

Marketer::Marketer() {
    marketerId = 0;
    marketerName = "";
}

Marketer::Marketer(int mId, string maName) {
    marketerId = mId;
    marketerName = maName;
}

void Marketer::createMarketingCampaign(int cDate, int cTime, int cId, string cDescription) {
    if (campaign == nullptr) {
        campaign = new Campaign(cDate, cTime, cId, cDescription);
    }
    else {
        cout << "A campaign already exists. Close the current campaign to create a new one." << endl;
    }
}

string Marketer::manageMarketerCampaign(int cId) {
    if (campaign != nullptr) {
        return "Campaign managed successfully.";
    }
    else {
        return "Campaign not found or not assigned to this marketer.";
    }
}

Marketer::~Marketer() {
    if (campaign != nullptr) {
        delete campaign;
    }
}
