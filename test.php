<html>
  <head>
    <title>A quick test</title>
  </head>
  <body>
  <form action="/welcome.php" method="get">
  Username:<br>
  <input type="text" name="username" value="Mickey">
  <br>
  Password:<br>
  <input type="text" name="password" value="Mouse">
  <br><br>
  <input type="submit" value="Submit">
  </form>
  </body>



</html>


let objects = firebase.database().ref('/objects/');
    function writeObjectData(number, latitude, longitude, altitude, username, pub, color) {
        firebase.database().ref('/objects/' + number).set({
            longitude: longitude,
            latitude: latitude,
            altitude: altitude,
            username: username,
            public: pub,
            color: color
        });
    }
    function createGroup(groupname, username) {
        let path = `/groups/${groupname}/`;
        firebase.database().ref(path).set({
            number: 1
        });
        firebase.database().ref(path + 'members/0/').set({
            member: username
        });
    }
    createGroup("Georgia Tech", "womackj");
    function addUserToGroup(groupname, username, number) {
        let path2 = `/groups/${name}`;
        firebase.database().ref(path2).set({
            number: 3
        });
        let path = `/groups/${name}/members/`;
        firebase.database().ref(path + number).set({
            member: member
        });
    }
    function joinGroup(groupname, username) {
        let path = `/users/groups/${groupname}/`;
        firebase.database().ref(path).set({

        })
    }

    function updateUserPosition(username, latitude, longitude, altitude, groups) {
        firebase.database().ref('users/' + username).set({
            latitude: latitude,
            longitude: longitude,
            altitude: altitude,
            groups: groups
        });
        firebase.database().ref('users/username' + groups).set({

        })
    }