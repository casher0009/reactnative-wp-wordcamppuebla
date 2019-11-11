import React from "react";
import { View, Text, StyleSheet } from "react-native";

const Title = ({ children, mode = "light" }) => {
  return (
    <View>
      <Text
        style={[styles.text, mode === "light" ? styles.light : styles.dark]}
      >
        {children}
      </Text>
    </View>
  );
};

export default Title;

const styles = StyleSheet.create({
  text: {
    fontSize: 35
  },
  dark: {
    color: "white"
  },
  light: {
    color: "black"
  }
});
