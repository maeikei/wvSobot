#! /bin/sh

USERNAME=$1
PASSWORD=$2
STATUS=$3
COOKIEPATH=$HOME/cookie.txt
USERAGENT='sh script to update status'

# avoid captcha
# load cookie if it exists and not expired.
if [ ! -e $COOKIEPATH ]; then
    echo login
    curl --silent \
         -L \
         -c $COOKIEPATH \
         -d "session[username_or_email]"=$USERNAME \
         -d "session[password]"=$PASSWORD \
         https://twitter.com/sessions > /dev/null
fi

# fetch authenticity token
echo fetch authenticity token
TOK=$( \
curl -L \
     --silent \
     -b $COOKIEPATH \
     -A "$USERAGENT" \
     http://twitter.com/ \
     | /bin/grep -o '<input name="authenticity_token" type="hidden" value=".*" /></div>' \
     | uniq \
     | /bin/egrep -o '\w{20,}'
)

echo 'authenticity token is' $TOK

# update status
curl -L \
     --silent \
     -b $COOKIEPATH \
     -A "$USERAGENT" \
     -d tab='index' \
     -d in_reply_to_status_id='' \
     -d authenticity_token=$TOK \
     -d source='' \
     -d display_coordinates='' \
     -d lat='' \
     -d lon='' \
     -d place_id='' \
     -d status="$STATUS" \
     http://twitter.com/status/update > /dev/null

