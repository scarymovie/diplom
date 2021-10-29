import {ref} from "vue";
import axios from "axios";

export default function useBoxes() {
    const boxes = ref([])

    const getBoxes = async () => {
        let response = await axios.get('/api/boxes')
        boxes.value = response.data.data;
    }

    return {
        boxes,
        getBoxes
    }
}
