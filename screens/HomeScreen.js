import * as WebBrowser from "expo-web-browser";
import React, { useEffect, useState } from "react";
import { StyleSheet, TouchableOpacity, View, SafeAreaView } from "react-native";
import Title from "../components/Title";
import axios from "axios";

export default function HomeScreen() {
  const URL = "https://cbc9b778.ngrok.io/wp-json/wp/v2/posts";
  const [posts, setPosts] = useState([]);
  useEffect(() => {
    console.log("useEffect");
    axios
      .get(URL)
      .then(response => {
        //response.data
        // console.log(response.data[0].title)
        setPosts(response.data)
      })
      .catch(e => {
        console.log(e);
        alert("ooops");
      });
  });

  const renderPosts = (posts = []) => {
    if (posts.length > 0) {
      return posts.map(post,key => {
        return <Title key={key}>{post.title.rendered}</Title>;
      });
    }
    return null;
  };

  return (
    <View style={styles.container}>
      <SafeAreaView>
        {renderPosts(posts)}
      </SafeAreaView>
    </View>
  );
}

HomeScreen.navigationOptions = {
  header: null
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: "white"
  }
});
